import register from 'ShopUi/app/registry';
export default register('similar-products', () => import(
    /* webpackMode: "lazy" */
    /* webpackChunkName: "similar-products" */
    './similar-products'));
