import register from 'ShopUi/app/registry';
export default register('recommendation-products', () => import(
    /* webpackMode: "lazy" */
    /* webpackChunkName: "recommendation-products" */
    './recommendation-products'));
