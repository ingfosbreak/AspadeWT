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
                    text: data},
        async : false,
        success:function(data) {
            console.log(data._token);
            console.log(data.text);
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