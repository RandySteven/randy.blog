function validateInputBlog() {
    let title = document.forms["blog-form"]["title"].value
    let content = document.forms["blog-form"]["content"].value
    let errorMessage = document.getElementById("error-message")
    if(title === "" || content === "") {
        document.getElementById("title").style.borderColor = "red"
        document.getElementById("content").style.borderColor = "red"
        errorMessage.style.color = "red"
        errorMessage.hidden = false
        return false
    }
    return true
}