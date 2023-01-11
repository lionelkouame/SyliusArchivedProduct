import Axios from 'axios';
import 'animate.css/animate.min.css';

export class ArchivedMassActionDirective {

    static selector = '[archived-mass-action]';

    constructor(public element: HTMLElement) {}

    init() {
        // add event listener to the element
        this.element.addEventListener('click', () => {
            const checkBoxProducts = document.querySelectorAll<HTMLInputElement>('.bulk-select-checkbox');

            const url = this.element.dataset.url;

            const ids: any[] = [];

            checkBoxProducts.forEach((checkBoxProduct) => {
                if (checkBoxProduct.checked) {
                    ids.push(checkBoxProduct.value);
                    checkBoxProduct.parentElement.parentElement.className += ' animate__animated animate__bounceOutRight';
                }

            });

            Axios.post(url, {productIds: JSON.stringify(ids)})
                .then(function (response) {
                    location.reload();
                });
        });
    }
}
