document.addEventListener("DOMContentLoaded", () => {
    const categoryButtons = document.querySelectorAll(".category-btn");
    const posts = document.querySelectorAll(".post");

    categoryButtons.forEach(button => {
        button.addEventListener("click", () => {
            const selectedCategory = button.getAttribute("data-category");
            
            // Remove active class from all buttons
            categoryButtons.forEach(btn => btn.classList.remove("active"));
            button.classList.add("active");

            // Mostrar ou esconder posts
            if (selectedCategory === "all") {
                // Exibir todos os posts
                posts.forEach(post => {
                    post.style.display = "block";
                });
            } else {
                // Mostrar apenas os 3 primeiros da categoria selecionada
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

    // Trigger 'all' category on load
    document.querySelector(".category-btn[data-category='all']").click();
});
