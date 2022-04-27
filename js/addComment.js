const AddCommentInputForm = document.querySelector('.AddCommentInputForm');
const RepeatTo = document.querySelector('.RepeatTo');
const RepeatToButton = document.querySelectorAll('.RepeatToButton');
const CommentMessage = document.querySelector('.CommentMessage');
const CommentSend = document.querySelector('.CommentSend');
const AnnId = document.querySelector('.AnnId');
const UserId = document.querySelector('.UserId');
const Nav = document.querySelector('nav');
const RepeatSomeoneHeader = document.querySelector('.RepeatSomeoneHeader');

CommentSend.addEventListener('click', async function(e) {
    e.preventDefault();

    const form = new FormData();
    form.set('id', AnnId.value)

    const commentJSON = async () => {
        const response = await fetch("./php/getAnnComments.php", {
            method: 'POST',
            body: form
        });
        const jsondata = await response.json();
        return jsondata.msg;
    }
    let commentData = await commentJSON();
    let comments;

    if(commentData.length > 0) {
        comments = await JSON.parse(commentData);
    } else {
        comments = [];
    }

    async function UpdateComments(id, json) {
        const jsonform = new FormData();
        jsonform.set('id', id);
        jsonform.set('json', json);
        console.log(id);
        console.log(json);
        const response = await fetch('./php/addNewComment.php', {
            method: "POST",
            body: jsonform
        });
        const resp = await response.json();
        if(resp.msg == 'SUCCESS') {
            window.location.href = `item.php?id=${AnnId.value}`;
        }
    }

    if(RepeatTo.innerText == 0) {
        let id;

        if(comments) {
            id = comments.length + 1;
        } else {
            id = 1;
        }

        const newComment = {
            commentId: id,
            userId: UserId.value,
            desc: CommentMessage.value,
            subcomments: []
        }
        comments.push(newComment);
        UpdateComments(AnnId.value, JSON.stringify(comments));
    } else {
        const repeatId = RepeatTo.innerText;
        let subcommentId

        if(comments.subcomments) {
            subcommentId = comment.subcomments.length + 1;
        } else {
            subcommentId = 1;
        }

        const newComment = {
            commentParentId: repeatId,
            subcommentId: subcommentId,
            userId: UserId.value,
            desc: CommentMessage.value,
        }
        comments.map((comment) => {
            if(comment.commentId == repeatId) {
                comment.subcomments.push(newComment);
            }
        })
        UpdateComments(AnnId.value, JSON.stringify(comments));
    }
})

RepeatToButton.forEach(btn => {
    btn.addEventListener('click', function(e) {
        e.preventDefault();
        const id = e.target.getAttribute('id');
        const name = e.target.parentElement.querySelector('h3').innerText;
        document.querySelector('.RepeatTo').innerText = id;

        RepeatSomeoneHeader.style.display = 'initial';
        RepeatSomeoneHeader.innerText = `Odpowiedz: ${name}`
    })
})