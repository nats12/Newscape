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

	render() {

		const category = this.props.category;

		return(
			<label className={ category.selected ? 'active': '' } onClick={ () => {this.props.selectCategory(category.name)} }>
				{ category.name }
	          <input
	            name={category.name}
	            type="checkbox"
	            onChange={this.props.handleInputChange} />
        	</label>
		)
	}
}


Tab.PropTypes = {
  category: PropTypes.object,
  selectTab: PropTypes.func
}

export default Tab