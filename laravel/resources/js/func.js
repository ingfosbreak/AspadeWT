function reply_click(clicked_id)
{
    console.log(clicked_id);
}


function getAjax(url, data=null) {
    return callAjax('GET', url, data)
}   

function postAjax(url, token) {
    return callAjax('POST', url, data)
}

function callAjax(type, url, token, data=null) {
            
    $.ajax({
        type  : type,
        url   : url,
        data  : { _token: token,
                    data: data},
        async : false,
        success:function(data) {
            if (data == true) {
                alert("success created task");
            }
            else {
                alert("failed to create task");
            }
        }
    });
    
}


// $.ajax({
            //    type:'POST',
            //    url:'/getmsg',
            //    data:{ _token: '{{csrf_token()}}'},
            //    success:function(data) {
            //       console.log(data.msg);
            //    }
            // });

export {reply_click , callAjax};