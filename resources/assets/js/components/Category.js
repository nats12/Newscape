import React, { Component } from 'react';
import ReactDOM from 'react-dom';


class Category extends Component {
	 constructor() {
		super()
		this.state = {
		  checked: false
		}

	}

  	componentWillMount() {
		this.props.selectedCategories.map((category, index) => {

	  	if (this.props.category.name === category.name) {
			this.setState({checked: true});
		  }
		})
  	}

	renderCheckbox = () => {
		let isChecked = false;
		this.props.selectedCategories.map((category, index) => {

		  	if (this.props.category.name === category.name) {
				isChecked = true;
		  	}
		})

		return (
			<input 
			  className="category-checkbox"
			  data-id={this.props.category.id} 
			  name={this.props.category.name}
			  onChange={(e) => this.toggleCheckboxState()}
			  type="checkbox"
			  checked={isChecked}
			/>
		)
	} 

	toggleCheckboxState = () => {
		let isChecked = !this.state.checked;
		this.setState({checked: isChecked});
		this.props.selectCategory(this, isChecked); 
	}

	render() {

		return (
		  <div className="large-12 columns">
			<label className="category">
			  {this.props.category.name}
			  {this.renderCheckbox()}
			</label>
		  </div>
		)

	}
}

export default Category