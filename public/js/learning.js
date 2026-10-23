// public/js/learning.js
document.addEventListener('DOMContentLoaded', () => {
    const search = document.getElementById('courseSearch');
    const filters = Array.from(document.querySelectorAll('.filter-chip'));
    const cards = Array.from(document.querySelectorAll('.course-card'));
    const noCourses = document.getElementById('noCourses');
    let activeFilter = 'all';

    function filterCourses() {
        const query = (search?.value || '').trim().toLowerCase();
        let visible = 0;

        cards.forEach(card => {
            const level = card.dataset.level || '';
            const isFree = card.dataset.free === 'true';
            const searchable = (card.dataset.search || '') + ' ' + card.innerText.toLowerCase();
            const matchesFilter = activeFilter === 'all'
                || activeFilter === level
                || (activeFilter === 'free' && isFree);
            const matchesSearch = searchable.toLowerCase().includes(query);
            const show = matchesFilter && matchesSearch;
            card.hidden = !show;
            if (show) visible++;
        });

        if (noCourses) noCourses.hidden = visible !== 0;
    }

    filters.forEach(button => {
        button.addEventListener('click', () => {
            activeFilter = button.dataset.filter || 'all';
            filters.forEach(item => {
                item.classList.toggle('active', item === button);
                item.setAttribute('aria-pressed', item === button ? 'true' : 'false');
            });
            filterCourses();
        });
    });

    search?.addEventListener('input', filterCourses);
    filters.forEach(button => button.setAttribute('aria-pressed', button.classList.contains('active') ? 'true' : 'false'));
    filterCourses();
});
