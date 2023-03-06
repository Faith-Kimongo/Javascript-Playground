const categories = document.querySelectorAll("#subcategory");

categories.forEach((category) => {
  const arrow = category.querySelector("#category-arrow");
//   const subcategory = category.querySelector("#subcategory");

  arrow.addEventListener("mouseenter", () => {
    subcategory.style.display = "block";
  });

  arrow.addEventListener("mouseleave", () => {
    subcategory.style.display = "none";
  });
});
