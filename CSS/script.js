const gallery = document.querySelector('.gallery');
const nextButton = document.getElementById('next');
const prevButton = document.getElementById('prev');

// Индекс текущего элемента
let currentIndex = 0;


// Ширина одного элемента (динамически определяем)
const containerWidth = document.querySelector('.gallery-item').offsetWidth;

// Обработчик кнопки "Вперёд"
nextButton.addEventListener('click', () => {
    currentIndex++;
    if (currentIndex > 3) {
        currentIndex = 3;
    }
    updateGalleryPosition();

});

// Обработчик кнопки "Назад"
prevButton.addEventListener('click', () => {
    currentIndex--;
    if (currentIndex < -3) {
        currentIndex = -3;
    }
    updateGalleryPosition();

});

// Функция для обновления позиции галереи
function updateGalleryPosition() {
    let offset = -currentIndex * containerWidth; // Смещение
    gallery.style.transform = `translateX(${offset}px)`; // Применяем смещение
}
