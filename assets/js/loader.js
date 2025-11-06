window.addEventListener('load', function(){
    const loaderWrapper = document.getElementById('loader-wrapper');
    const loaderProgress = document.getElementById('loader-progress');
    const loaderCounter = document.getElementById('loader-counter');
    if (!loaderWrapper || !loaderProgress || !loaderCounter) return;
    if (sessionStorage.getItem('isLoaded')) {
        loaderWrapper.style.display = 'none';
        return;
    }

    let animationCompleted = false;
    const updateCounter = () => {
        if (animationCompleted) {
            loaderCounter.textContent = '100%';
            return;
        }
        const wrapperHeight = loaderWrapper.getBoundingClientRect().height || 1;
        const progressHeight = loaderProgress.getBoundingClientRect().height;
        const percentage = Math.min(100, Math.round((progressHeight / wrapperHeight) * 100));
        loaderCounter.textContent = `${percentage}%`;
        requestAnimationFrame(updateCounter);
    };

requestAnimationFrame(updateCounter);
    loaderProgress.addEventListener('animationend', function(){
        animationCompleted = true;
        loaderCounter.textContent = '100%';
        loaderProgress.style.setProperty('--loader-width', '100vw');
        loaderProgress.addEventListener('transitionend', function(){
            sessionStorage.setItem('isLoaded', true);
            document.body.classList.add('loaded');
            if (loaderWrapper) {
                setTimeout(()=>{
                    loaderWrapper.style.display = 'none';
                }, 1000);
            }
        }, {once: true});
    }, {once: true});

});