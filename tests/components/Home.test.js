import Home from '../../resources/js/components/Home';
import { mount } from '@vue/test-utils'

test('displays message', () => {
    const wrapper = mount(Home);

    expect(wrapper.text()).toContain('Home components')
});
