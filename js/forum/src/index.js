import { extend } from 'flarum/common/extend';
import addAlphabeticalSort from './extend/addAlphabeticalSort';

app.initializers.add('gmsl/flarum-abc', () => {
    addAlphabeticalSort();
});