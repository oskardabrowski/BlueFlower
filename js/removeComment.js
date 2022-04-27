const DeleteParentComment = document.querySelectorAll('.DeleteParentComment');
const DeleteSubComment = document.querySelectorAll('.DeleteSubComment');

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

const commentJSON = async (id) => {
    const form = new FormData();
    form.set('id', id)
    const response = await fetch("./php/getAnnComments.php", {
        method: 'POST',
        body: form
    });
    const jsondata = await response.json();
    return jsondata.msg;
}

DeleteParentComment.forEach(btn => {
    btn.addEventListener('click', async function(e) {
        e.preventDefault();
        const id = await e.target.getAttribute('id');
        const annid = await e.target.getAttribute('annid');
        const response = await commentJSON(annid);
        const data = JSON.parse(response);
        const newArr = data.filter(el => el.commentId != id);
        UpdateComments(annid, JSON.stringify(newArr));
    })
})
DeleteSubComment.forEach(btn => {
    btn.addEventListener('click', async function(e) {
        e.preventDefault();
        const id = e.target.getAttribute('id');
        const parentId = e.target.getAttribute('parent');
        const annid = await e.target.getAttribute('annid');
        const response = await commentJSON(annid);
        const data = JSON.parse(response);
        const newArr = data.map(el => {
            if(el.commentId == parentId) {
                const newsubcomments = el.subcomments.filter(comm => comm.subcommentId != id);
                el.subcomments = newsubcomments;
            }
            return el;
        })
        UpdateComments(annid, JSON.stringify(newArr));
    })
})

