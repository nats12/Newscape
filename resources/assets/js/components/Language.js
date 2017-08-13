import React, { Component } from 'react';

class Language extends Component {
	constructor() {
		super()
		this.state = {
		  checked: false
		}
	}

	toggleCheckboxState = () => {
		let isChecked = !this.state.checked;
		this.setState({checked: isChecked});
		this.props.selectLanguage(this, isChecked); 
	}

	componentWillMount() {
		this.props.selectedLanguages.map((language, index) => {

			if (this.props.language.name === language.name) {
				this.setState({checked: true});
			}
		})
	}

	renderCheckbox = () => {

		return (
		  	<input 
				className="language-checkbox"
				name={this.props.language.name}
				onChange={(e) => this.toggleCheckboxState()}
				type="checkbox"
				checked={this.state.checked}
				key={this.props.id}
		  	/>
		)
	} 

	render() {

		return (
		  	<div className="large-12 columns">
				<label className="language">
			  	{this.props.language.name}
			  	{this.renderCheckbox()}
				</label>
		  	</div>
		)

	}
}

export default Language