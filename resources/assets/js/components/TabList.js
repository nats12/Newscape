import React, { Component } from 'react';
import PropTypes from 'prop-types';

import Tab from './Tab'


class TabList extends Component {
	constructor() {
		super()
	}


	render() {

		const categories = this.props.categories;

		return (
			<ul className="nav text-center">
		    {
		      categories.map((category, i) => (
		        <Tab key={"category_" + i} category={category} selectTab={this.props.selectTab}/>
		      ))
		    }
		  </ul>
		)
	}
}


TabList.PropTypes = {
  categories: PropTypes.array,
  selectTab: PropTypes.func
}

export default TabList