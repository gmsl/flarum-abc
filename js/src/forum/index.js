import { extend } from 'flarum/extend';
import DiscussionList from 'flarum/components/DiscussionList';
import SortDiscussionsAlphabetically from './components/SortDiscussionsAlphabetically';

app.initializers.add('gmsl/flarum-abc', () => {
    extend(DiscussionList.prototype, 'requestParams', function(params) {
        if (this.sortMap().alphabetical) {
            params.sort = 'title';
        }
    });

    extend(DiscussionList.prototype, 'sortMap', function(sortMap) {
        sortMap.alphabetical = 'title';
    });

    extend(DiscussionList.prototype, 'view', function(vdom) {
        const sortDropdown = vdom.children.find(child => child.attrs.className === 'Dropdown App-titleControl');
        
        if (sortDropdown) {
            sortDropdown.children.push(SortDiscussionsAlphabetically.component());
        }
    });
});
