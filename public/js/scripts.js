// Логика переключения вкладок
document.querySelectorAll('.tab').forEach(tab => {
    tab.addEventListener('click', () => {
        const index = tab.dataset.index;

        // Удаление активных классов у вкладок
        document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
        // Удаление активных классов у содержимого
        document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));

        // Добавляем активные классы текущей вкладке и содержимому
        tab.classList.add('active');
        document.querySelector(`.tab-content[data-index="${index}"]`).classList.add('active');
    });
});

document.querySelectorAll('.more-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        // здесь можешь вставить код открытия модального окна
        document.getElementById('orderModal').style.display = 'flex';
        // и заполнить детали заказа по необходимости
    });
});

// Обработка закрытия модалки
document.getElementById('closeModal').addEventListener('click', () => {
    document.getElementById('orderModal').style.display = 'none';
});
