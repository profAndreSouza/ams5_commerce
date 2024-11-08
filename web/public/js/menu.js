
document.querySelectorAll('.category').forEach(category => {
  category.addEventListener('mouseenter', function() {
    const subcategories = this.querySelector('.subcategories');
    const rect = subcategories.getBoundingClientRect();
    const viewportWidth = window.innerWidth;

    if (rect.left < 0) {
      subcategories.style.left = '0';
      subcategories.style.right = 'auto';
    } else if (rect.right > viewportWidth) {
      subcategories.style.left = 'auto';
      subcategories.style.right = '0';
    } else {
      subcategories.style.left = '0';
      subcategories.style.right = 'auto';
    }
  });
});

