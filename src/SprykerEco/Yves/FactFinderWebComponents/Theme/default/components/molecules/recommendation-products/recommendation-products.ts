import Component from 'ShopUi/models/component';
 
export default class RecommendationProducts extends Component {
    private recommendationElement: HTMLElement;

    protected readyCallback(): void {
        this.recommendationElement = <HTMLElement>this.querySelector(`.${this.jsName}__holder`);
        this.recommendationElement.setAttribute('record-id', this.recordId);
    }

    get recordId(): string {
        return this.getAttribute('recordId');
    }
}
