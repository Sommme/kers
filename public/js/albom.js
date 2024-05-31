// script.js
document.addEventListener('DOMContentLoaded', function() {
    const galleryContainer = document.querySelector('.gallery-container');

    const items = [
        { src: 'image3.jpg', alt: 'Экспонат 3', caption: 'Описание экспоната 3' },
        { src: 'image4.jpg', alt: 'Экспонат 4', caption: 'Описание экспоната 4' }
        // Добавьте больше объектов по необходимости
    ];

    items.forEach(item => {
        const galleryItem = document.createElement('div');
        galleryItem.classList.add('gallery-item');

        const img = document.createElement('img');
        img.src = item.src;
        img.alt = item.alt;

        const caption = document.createElement('div');
        caption.classList.add('caption');
        caption.textContent = item.caption;

        galleryItem.appendChild(img);
        galleryItem.appendChild(caption);

        galleryContainer.appendChild(galleryItem);
    });
});
