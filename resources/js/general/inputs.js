function addDropdowns(){
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
        a.setAttribute("name", selElmnt.options[selElmnt.selectedIndex].innerHTML);
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        if (selElmnt.options[selElmnt.selectedIndex].getAttribute('percent') !== ''){
            a.style = "display:flex;flex-wrap:row;";
            a.setAttribute("percent",selElmnt.options[selElmnt.selectedIndex].getAttribute('percent'));
            const h4 = document.createElement('h4');
            h4.classList.add('red_color');
            h4.innerText = 'от ' + selElmnt.options[selElmnt.selectedIndex].getAttribute('percent') + '%';
            a.innerHTML += '&nbsp;' + h4.outerHTML;
        }
        x[i].appendChild(a);
        /* For each element, create a new DIV that will contain the option list: */
        b = document.createElement("DIV");
        b.setAttribute("class", "dropdown-select-items dropdown-select-hide");
        for (j = 1; j < ll; j++) {
            /* For each option in the original select element,
            create a new DIV that will act as an option item: */
            c = document.createElement("DIV");
            c.innerHTML = selElmnt.options[j].innerHTML;
            if (selElmnt.options[j].getAttribute('percent') !== ''){
                c.style = "display:flex;flex-wrap:row;";
                c.setAttribute("percent",selElmnt.options[j].getAttribute('percent'));
                c.setAttribute("name",selElmnt.options[j].innerHTML);
                const h4 = document.createElement('h4');
                h4.classList.add('red_color');
                h4.innerText = 'от ' + selElmnt.options[j].getAttribute('percent') + '%';
                c.innerHTML += '&nbsp;' + h4.outerHTML;
            }
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
}
addDropdowns();
function renderCalc() {
    const calculator = document.querySelector('.mortgage-calculator');
    const insurance = calculator.querySelector('input[type="checkbox"]').checked;
    const startIncome = Number(calculator.querySelector('input[type="range"]#start-payment').value);
    const price = Number(calculator.querySelector('input[type="range"]#price').value) - startIncome;
    const loanTerm = Number(calculator.querySelector('input[type="range"]#loan-term').value);
    let percent = Number(calculator.querySelector('.dropdown-select-selected').getAttribute('percent'));
    if (!insurance){
        calculator.querySelector('#percents h2').innerText = percent + 1 + '%';
        calculator.querySelector('#percents span').innerText = null;
        percent += 1;
    }
    if (insurance){
        calculator.querySelector('#percents h2').innerText = percent + '%';
        calculator.querySelector('#percents span').innerText = percent + 1 + '%';
    }
    let monthPercent = percent / 100 / 12;
    let monthLoan = loanTerm*12;
    let monthPay = price * (monthPercent + (monthPercent / (((1+monthPercent)**monthLoan) - 1)));
    let fullPrice = monthPay * monthLoan;
    if (fullPrice < 0){
        fullPrice = 0;
    }
    if (monthPay < 0){
        monthPay = 0;
    }
    let tax = (fullPrice - price)*0.13;
    if (tax < 0){
        tax = 0;
    }
    if (tax > 2000000){
        tax = 2000000;
    }
    calculator.querySelector('.mortgage-calculator-middle.block .block__heading').innerHTML = calculator.querySelector('.dropdown-select-selected').getAttribute('name');
    calculator.querySelector('#calc-month-pay').innerText = monthPay.toLocaleString('ru-RU', { style: 'currency', currency: 'RUB', maximumFractionDigits: 0 });
    calculator.querySelector('#calc-full-price').innerText = fullPrice.toLocaleString('ru-RU', { style: 'currency', currency: 'RUB', maximumFractionDigits: 0});
    calculator.querySelector('#tax').innerText = tax.toLocaleString('ru-RU', { style: 'currency', currency: 'RUB', maximumFractionDigits: 0});
}

const calc = document.querySelector('.mortgage-calculator');
if (calc !== null){
    renderCalc();
    calc.addEventListener('input',function (evt){
        renderCalc();
    });
    calc.addEventListener('click',function (evt){
        renderCalc();
    });
}
calcDropdownEvents(calc);
function calcDropdownEvents(calc){
    if (calc !== null){
        document.querySelectorAll('.mortgage-calculator .dropdown-select-items div').forEach((itm) => {
            try {
                itm.removeEventListener('click', addListenerSelectCalc,true);
            }catch (err){}
        });
        calc.querySelectorAll('.dropdown-select-items div').forEach((evt) => {
            evt.addEventListener('click', addListenerSelectCalc);
        });
    }
}
function addListenerSelectCalc (e) {
    const selected = document.querySelector('.dropdown-select-selected');
    selected.removeAttribute('class');
    const tempThis = this.innerHTML;
    const tempPercent = this.getAttribute('percent');
    const tempName = this.getAttribute('name');
    selected.removeAttribute('class');
    this.setAttribute('percent',selected.getAttribute('percent'));
    this.setAttribute('name', selected.getAttribute('name'));
    selected.setAttribute('percent',tempPercent);
    selected.setAttribute('name',tempName);
    this.innerHTML = selected.innerHTML;
    selected.innerHTML = tempThis;
    selected.classList.add('dropdown-select-selected');
    const newSelected = document.querySelector('.dropdown-select-selected');
    selectClickEvent(newSelected);
    renderCalc();
    calcDropdownEvents(document.querySelector('.mortgage-calculator'));
}
function selectClickEvent(select){
    select.addEventListener("click", function(ev) {
        if(document.querySelector('.mortgage-calculator .dropdown-select-selected').classList.contains('dropdown-select-arrow-active') === true){
            document.querySelector('.mortgage-calculator .dropdown-select-selected').classList.add("dropdown-select-arrow-active");
            document.querySelector('.mortgage-calculator .dropdown-select-items').classList.remove('dropdown-select-hide');
        }else {
            document.querySelector('.mortgage-calculator .dropdown-select-selected').classList.remove("dropdown-select-arrow-active");
            document.querySelector('.mortgage-calculator .dropdown-select-items').classList.add('dropdown-select-hide');
        }
    },true);
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
    const h4 = switch_.closest('.row__reverse').querySelector('h4');

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
