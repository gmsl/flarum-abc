import Component from 'flarum/Component';
import Dropdown from 'flarum/components/Dropdown';
import Button from 'flarum/components/Button';

export default class SortPostsAlphabetically extends Component {
    view() {
        const sortMap = this.getSortMap();

        return Dropdown.component({
            buttonClassName: 'Button',
            label: sortMap[this.props.params().sort] || 'Sort',
            children: Object.keys(sortMap).map(sort => {
                const active = this.props.params().sort === sort;
                return Button.component({
                    children: sortMap[sort],
                    icon: active ? 'fas fa-check' : true,
                    onclick: this.changeSort.bind(this, sort),
                    active: active,
                });
            }),
        });
    }

    getSortMap() {
        const map = {};

        map[''] = 'Default';
        map['alphabetical'] = 'Alphabetical';

        return map;
    }

    changeSort(sort, e) {
        e.preventDefault();

        if (this.props.params().sort === sort) {
            return;
        }

        this.props.params().sort = sort;

        this.props.refreshResults();
    }
}
