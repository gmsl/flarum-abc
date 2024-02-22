import { extend } from 'flarum/common/extend';
import DiscussionListState from 'flarum/common/states/DiscussionListState';

export default function addAlphabeticalSort() {
    extend(DiscussionListState.prototype, 'sortMap', function (map) {
        map.alpha = 'title';
    });
}