document.addEventListener('DOMContentLoaded', function () {

    const latestnews = document.querySelector('.latest__news')
    const latestblog = document.querySelector('.latest__blog')
    const minNewsNumber = checkLatestNewsNum();
    const minPostNumber = checkLatestBlogNum();

    // checking if news containers have at least 2 posts or news - if not entire container should not be displayed

    function checkLatestNewsNum() {

        const array = []
        const elements = [...latestnews.children];
        elements.forEach(element => {

            if (element.classList.contains('single-news')) {
                array.push(element)

            }

        });

        return array.length;
    }

    function checkLatestBlogNum() {
        const array = []
        const elements = [...latestblog.children];
        elements.forEach(element => {

            if (element.classList.contains('single-post')) {
                array.push(element)

            }

        });

        return array.length;
    }


    function hideLatestNewsCointainer() {
        if (minNewsNumber < 2) {
            latestnews.style.display = "none";
        }
    }

    function hideLatestPostContainer() {
        if (minPostNumber < 2) {
            latestblog.style.display = "none";
        }
    }

    hideLatestNewsCointainer();
    hideLatestPostContainer();







})