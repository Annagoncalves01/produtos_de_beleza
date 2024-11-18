document.addEventListener("DOMContentLoaded", () => {
    const categoryButtons = document.querySelectorAll(".category-btn");
    const posts = document.querySelectorAll(".post");

    categoryButtons.forEach(button => {
        button.addEventListener("click", () => {
            const selectedCategory = button.getAttribute("data-category");
            
            categoryButtons.forEach(btn => btn.classList.remove("active"));
            button.classList.add("active");

            if (selectedCategory === "all") {
                posts.forEach(post => {
                    post.style.display = "block";
                });
            } else {
                let visiblePosts = 0;
                posts.forEach(post => {
                    const postCategory = post.getAttribute("data-category");

                    if (postCategory === selectedCategory && visiblePosts < 3) {
                        post.style.display = "block";
                        visiblePosts++;
                    } else {
                        post.style.display = "none";
                    }
                });
            }
        });
    });

    document.querySelector(".category-btn[data-category='all']").click();
});
