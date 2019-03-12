import Component from 'ShopUi/models/component';

export default class SimilarProducts extends Component {
    private similarProductsElement: HTMLElement;
    
    protected readyCallback(): void {
        this.similarProductsElement = <HTMLElement>this.querySelector(`.${this.jsName}__holder`);
        this.similarProductsElement.setAttribute('record-id', this.recordId);
    }
    
    get recordId(): string {
        return this.getAttribute('recordId');
    }
}
