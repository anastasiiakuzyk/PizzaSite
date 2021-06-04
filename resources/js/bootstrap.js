window._ = require('lodash');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });

document.addEventListener("DOMContentLoaded", () => {
    const cartButton = document.getElementsByClassName("cart_btn");
    const cartCount = document.getElementById("cart__count")
    for (let i = 0; i < cartButton.length; i++) {
        cartButton[i].addEventListener('click', (e) => {
            const type = e.target.getAttribute("type");
            const value = e.target.getAttribute("value");
            cartCount.innerText = parseInt(cartCount.innerText, 10) + 1;
            window.axios
                .post('/cart/add', { type: type,  value: value })
                .then((result) => alert('Успішно додано до корзини'));
        });
    }

    const orderMinusButton = document.getElementById("order-minus");
    const orderPlusButton = document.getElementById("order-plus");
    if (orderMinusButton !== null && orderPlusButton !== null) {
        orderMinusButton.addEventListener("click", () => {
            const type = orderMinusButton.getAttribute('type');
            const productId = orderMinusButton.getAttribute('productId');
            axios.post('/cart/remove', {
                type: type, value: productId
            }).then(() => window.location.reload(true));
        });
        orderPlusButton.addEventListener("click", () => {
            const type = orderMinusButton.getAttribute('type');
            const productId = orderMinusButton.getAttribute('productId');
            axios.post('/cart/add', {
                type: type, value: productId
            }).then(() => window.location.reload(true));
        });
    }


    const mobileMenu = document.getElementById('burger');
    if (mobileMenu !== null) {
        mobileMenu.addEventListener('click', () => {
           mobileMenu.classList.toggle('active');
           document.getElementById('mob__menu').classList.toggle('active');
        });
    }

    // Constructor

    const tabSize = document.getElementById("size-tab");
    const tabToping = document.getElementById("toping-tab");
    const tabRound = document.getElementById("round-tab");

    const tabContent = document.getElementById("tab-content");
    const tabButton = document.getElementById("tab-next");
    const tabSlider = document.getElementById("tab-content-slider");
    const form = {};
    if (tabContent !== null && tabContent !== undefined) {
        let currentTab = 0;
        console.log(toping);
        let sum = 0;
        const data = [];
        const tab1Setting = getTabSettings(0, tabSize);
        const tab2Setting = getTabSettings(1, tabToping);
        const tab3Setting = getTabSettings(2, tabRound);
        const tabs = [tab1Setting, tab2Setting, tab3Setting];

        // FIRST TAB
        const smallSizeButton = document.getElementById("small-size");
        const bigSizeButton = document.getElementById("big-size");

        smallSizeButton.addEventListener("click", () => {
            if (form.size === undefined || form.size === "big") {
                form.size = "small";
                smallSizeButton.classList.add('active');
                bigSizeButton.classList.remove('active');
                formToView(form);
            } else {
                form.size = undefined;
                smallSizeButton.classList.remove('active');
                formToView(form);
            }

        });

        bigSizeButton.addEventListener("click", () => {
            if (form.size === undefined || form.size === "small") {
                form.size = "big";
                bigSizeButton.classList.add('active');
                smallSizeButton.classList.remove('active');
                formToView(form);
            } else {
                form.size = undefined;
                bigSizeButton.classList.remove('active');
                formToView(form);
            }
        });

        //SECOND TAB
        const topings = document.getElementsByClassName("toping");
        for (let i = 0; i < topings.length; i++) {
            topings[i].addEventListener("click", () => {
                topings[i].classList.toggle("active");

                if (form.toping === undefined) {
                    form.toping = [];
                }
                const id = parseInt(topings[i].getAttribute("value"), 10);
                const inx = form.toping.indexOf(id);
                console.log(inx, id);
                if (inx === -1) {
                    form.toping.push(id);
                } else {
                    form.toping.splice(inx, 1);
                }
                formToView(form);
            });
        }

        //Third Tab
        const borders = document.getElementsByClassName("border");
        console.log(borders);
        for (let i = 0; i < borders.length; i++) {
            borders[i].addEventListener("click", () => {
                for (let k = 0; k < borders.length; k++) {
                    borders[k].classList.remove("active");
                }
                borders[i].classList.add("active");

                form.border = parseInt(borders[i].getAttribute("value"), 10);
                formToView(form);
            });
        }

        //Bottom panel
        const souses = document.getElementsByClassName("souse");
        console.log(souses);
        for (let i = 0; i < souses.length; i++) {
            souses[i].addEventListener("click", () => {
                console.log(souses[i].getAttribute("value"));
                form.souse = parseInt(souses[i].getAttribute("value"), 10);
                formToView(form);
            });
        }

        const submitButton = document.getElementById("submit_c");
        submitButton.addEventListener("click", () => {
            if (currentTab !== 3) {
                alert("Спочатку пройдіть усі шаги");
                return;
            }
            axios.post('/constructor/create', {...form, price: formToView(form)}).then((result) => {
                alert("Піца успішно створена та додана до кошику.!");
                document.location.href = "/cart";
            });
        });

        tabButton.addEventListener("click", () => {
            if (currentTab === 0) {
                if (form.size === undefined) {
                    alert("Будь ласка, спочатку оберить розмір піци")
                }else {
                    currentTab++;
                    tabSlider.style.marginLeft = "-" + (currentTab*100).toString() + "%";
                    tab1Setting.tabButton.classList.remove("active");
                    tab2Setting.tabButton.classList.add("active");
                }
            } else if (currentTab === 1) {
                if (form.toping === undefined) {
                    alert("Будь ласка, спочатку оберить топінг для піци")
                }else {
                    currentTab++;
                    tabSlider.style.marginLeft = "-" + (currentTab*100).toString() + "%";
                    tab2Setting.tabButton.classList.remove("active");
                    tab3Setting.tabButton.classList.add("active");
                }
            } else if (currentTab === 2) {
                if (form.border === undefined) {
                    alert("Будь ласка, спочатку оберить бортик для піци")
                }else {
                    currentTab++;
                    tabSlider.style.marginLeft = "-" + (currentTab*100).toString() + "%";
                    tab3Setting.tabButton.classList.remove("active");
                    tabContent.classList.add("hidden");
                    const swEl = document.getElementById("sw");
                    swEl.classList.add("open")
                    tabs.forEach((tab) => {
                        tab.tabButton.addEventListener("click", () => {

                        });
                    });
                }
            }
        });
    }
});

function getTabSettings(step, tabButton) {
    return {
        step: step,
        tabButton: tabButton,
    }
}

function formToView(form) {
    const borderPrice = [30, 20, 50, 0];
    const borderNames = ["З сосикою", "З сиром", "Подвійна сосика", "Без бортику"];
    const sousePrice = [10, 10, 10];
    const souseNames = ["Соус класичний", "Соус BBQ", "Соус рікота"];
    const result = [];
    let sum = 0;
    const priceEl = document.getElementById("price");
    const optionsEl = document.getElementById("option-list");

    if (form.size !== undefined) {
        if (form.size === "small") {
            result.push("Середня основа")
            sum += 60;
        }else {
            result.push("Велика основа")
            sum += 80;
        }
    }
    if (form.toping !== undefined) {
        form.toping.forEach((selected) => {
            const tmp = toping.find((t) => t.id.toString() === selected.toString());
            if (tmp !== undefined) {
                sum += tmp.price;
                result.push(tmp.name);
            }
        });
    }
    if (form.border !== undefined) {
        sum += borderPrice[form.border-1];
        result.push(borderNames[form.border-1]);
    }
    if (form.souse !== undefined) {
        sum += sousePrice[form.souse-1];
        result.push(souseNames[form.souse-1]);
    }

    const list = result.length !== 0 ? "<li>" + result.join('</li><li>') + "</li>" : "";

    optionsEl.innerHTML = list;
    priceEl.innerText = sum.toString() + "грн";
    return sum;
}