function addClass() {
    const windowSize = $(window).width();
    alert("hello");
    if (windowSize < 1000) {
        alert("hi");
        $('.posts-container').removeClass('container');
    }
    else {
        $('.status-container').removeClass('container');
    }
}
window.addEventListener("resize",addClass);
addClass();
