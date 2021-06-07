function check_input() {
    if (!document.comment_form.content.value)
    {
        alert("내용을 입력하세요!");    
        document.comment_form.content.focus();
        return;
    }
    document.comment_form.submit();
}