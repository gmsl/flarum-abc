import { extend } from 'flarum/extend';
import IndexPage from 'flarum/components/IndexPage';
import SortPostsAlphabetically from './components/SortPostsAlphabetically';

app.initializers.add('gmsl/flarum-abc', () => {
    extend(IndexPage.prototype, 'view', function(vdom) {
        const sortDropdown = vdom.children.find(child => child.attrs.className === 'Dropdown App-titleControl');
        
        if (sortDropdown) {
            sortDropdown.children.push(SortPostsAlphabetically.component());
        }
    });
});
