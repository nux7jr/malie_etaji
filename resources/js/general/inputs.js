let x, i, j, l, ll, selElmnt, a, b, c;
/* Look for any elements with the class "custom-select": */
x = document.getElementsByClassName("custom-select-dropdown");
l = x.length;
for (i = 0; i < l; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    ll = selElmnt.length;
    /* For each element, create a new DIV that will act as the selected item: */
    a = document.createElement("DIV");
    a.setAttribute("class", "dropdown-select-selected");
    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    x[i].appendChild(a);
    /* For each element, create a new DIV that will contain the option list: */
    b = document.createElement("DIV");
    b.setAttribute("class", "dropdown-select-items dropdown-select-hide");
    for (j = 1; j < ll; j++) {
        /* For each option in the original select element,
        create a new DIV that will act as an option item: */
        c = document.createElement("DIV");
        c.innerHTML = selElmnt.options[j].innerHTML;
        c.addEventListener("click", function(e) {
            /* When an item is clicked, update the original select box,
            and the selected item: */
            let y, i, k, s, h, sl, yl;
            s = this.parentNode.parentNode.getElementsByTagName("select")[0];
            sl = s.length;
            h = this.parentNode.previousSibling;
            for (i = 0; i < sl; i++) {
                if (s.options[i].innerHTML == this.innerHTML) {
                    s.selectedIndex = i;
                    h.innerHTML = this.innerHTML;
                    y = this.parentNode.getElementsByClassName("dropdown-same-as-selected");
                    yl = y.length;
                    for (k = 0; k < yl; k++) {
                        y[k].removeAttribute("class");
                    }
                    this.setAttribute("class", "dropdown-same-as-selected");
                    break;
                }
            }
            h.click();
        });
        b.appendChild(c);
    }
    x[i].appendChild(b);
    a.addEventListener("click", function(e) {
        /* When the select box is clicked, close any other select boxes,
        and open/close the current select box: */
        e.stopPropagation();
        closeAllSelect(this);
        this.nextSibling.classList.toggle("dropdown-select-hide");
        this.classList.toggle("dropdown-select-arrow-active");
    });
}

function closeAllSelect(elmnt) {
    /* A function that will close all select boxes in the document,
    except the current select box: */
    let x, y, i, xl, yl, arrNo = [];
    x = document.getElementsByClassName("dropdown-select-items");
    y = document.getElementsByClassName("dropdown-select-selected");
    xl = x.length;
    yl = y.length;
    for (i = 0; i < yl; i++) {
        if (elmnt == y[i]) {
            arrNo.push(i)
        } else {
            y[i].classList.remove("dropdown-select-arrow-active");
        }
    }
    for (i = 0; i < xl; i++) {
        if (arrNo.indexOf(i)) {
            x[i].classList.add("dropdown-select-hide");
        }
    }
}

/* If the user clicks anywhere outside the select box,
then close all select boxes: */
document.addEventListener("click", closeAllSelect);


function setColorPercent() {
    const checkbox = this.querySelector('input[type="checkbox"]');
    const switch_ = checkbox.closest('.switch');
    const h4 = switch_.closest('.space__between').querySelector('h4');

    checkbox.checked = !checkbox.checked;

    if (checkbox !== 'undefined' && h4 !== 'undefined' && h4.classList !== null){
        if (checkbox.checked === true){
            h4.classList.forEach(function(el){
                el === 'grayest' ? h4.classList.remove(['grayest']) : null;
                el === 'red_color' ? h4.classList.remove(['red_color']) : null;
            });
            switch_.classList.add(['active']);
            h4.classList.add(['red_color']);
        }else {
            h4.classList.forEach(function(el){
                el === 'grayest' ? h4.classList.remove(['grayest']) : null;
                el === 'red_color' ? h4.classList.remove(['red_color']) : null;
            });
            switch_.classList.remove(['active']);
            h4.classList.add(['grayest']);
        }
    }

}
function radio_wrapper(){
    const input_radios = document.querySelectorAll('.switch');
    if (input_radios !== 'undefined'){
        input_radios.forEach(function (input, index){
            input.addEventListener('click', setColorPercent);
        });
    }
}

function setWidthRange(input) {
    const width = input.querySelector('.width');
    const range = input.querySelector('input[type="range"]');
    range.style.width = width.clientWidth - 10 + 'px';
}

function setValueRange(input, range){
    const label = input.querySelector('.input h4');
    label.textContent = range.value;
    if (range.id === 'start-payment'){
        const percent = input.querySelector('.input .percent');
        const price = document.querySelector('#price');
        percent.textContent = Math.round((range.value / price.value) * 100, 0) + '%';
    }
    if (range.id === 'price'){
        const percent = document.querySelector('.input[name="start-payment"] .percent');
        const h4 = document.querySelector('.input[name="start-payment"] h4');
        const ranger_percent = document.querySelector('.input[name="start-payment"] input[type="range"]');

        ranger_percent.min = Math.round(range.value * 0.15,0);
        ranger_percent.max = Math.round(range.value,0);
        ranger_percent.step = (ranger_percent.max - ranger_percent.min) / 100;

        h4.textContent = Math.round(ranger_percent.value,0);
        percent.textContent = Math.round((ranger_percent.value / range.value) * 100,0) + '%';

        ranger_percent.style.backgroundSize = (ranger_percent.value - ranger_percent.min) * 100 / (ranger_percent.max - ranger_percent.min)  + '% 100%';
    }
}

function handleInputChange(e) {
    let target = e.target
    if (e.target.type !== 'range') {
        target = document.getElementById('range')
    }
    const min = target.min
    const max = target.max
    const val = target.value

    target.style.backgroundSize = (val - min) * 100 / (max - min) + '% 100%'
}

function range_wrapper(){
    const input_ranges = document.querySelectorAll('.range');
    if (input_ranges !== 'undefined'){
        input_ranges.forEach(function (input, index){
            setWidthRange(input);
            new ResizeObserver(()=>{
                setWidthRange(input);
            }).observe(input);
            input.addEventListener('input', handleInputChange);
            const range = input.querySelector('input');
            range.addEventListener('change', (event) =>{
                setValueRange(input, range);
            });
        });
    }
}

document.addEventListener('DOMContentLoaded', () => {
    radio_wrapper();
    range_wrapper();
});
