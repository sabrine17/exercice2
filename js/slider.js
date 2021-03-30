(function(){
    let bout = document.querySelectorAll('.rad-caroussel');
    console.log(bout.length);
    let caroussel = document.querySelector('.caroussel-2');
    let k =0;
    bout[0].checked = true;

    for( const bt of bout)
    {
        bt.value = k++;
        console.log(bt.value)
        bt.addEventListener('mousedown', function(){
            caroussel.style.transform = "translateX(" + (-this.value*100)+"vw)"
        })

    }
}())











