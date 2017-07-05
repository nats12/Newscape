import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import PropTypes from 'prop-types';


class Tab extends Component {
	constructor() {
		super()

		this.state = {
			selectedCategories: []
		}
	}


	handleInputChange = (event) => {
		const target = event.target;
	    const value = target.type === 'checkbox' ? target.checked : target.value;
	    const name = target.name;

	    let selectedCategories = this.state.selectedCategories;

	    target.checked ? console.log('checked') : console.log('not checked');
	    // this.setState({
	    //   selectedCategories: target.checked ? selectedCategories.push('2') : selectedCategories.splice('2', 1)
	    // });
	}


	render() {

		const category = this.props.category;

		return(
			<label className={ category.selected ? 'active': '' } onClick={ () => {this.props.selectTab(category.name)} }>
				{ category.name }
	          <input
	            name="test"
	            type="checkbox"
	            checked={this.state.isGoing}
	            onChange={this.handleInputChange} />
        	</label>
		)
	}
}


Tab.PropTypes = {
  category: PropTypes.object,
  selectTab: PropTypes.func
}

export default Tab