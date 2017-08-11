import React, { Component } from 'react';
import ReactDOM from 'react-dom';


class NewsSource extends Component {
	constructor() {
		super()
		this.state = {
			checked: false
		}
	}

	componentWillMount() {
	  this.props.selectedSources.map((source, index) => {

	    if (this.props.source.name === source.name) {
	      this.setState({checked: true});
	    }
	  })
	}

	toggleCheckboxState = () => {
	  let isChecked = !this.state.checked;
	  this.setState({checked: isChecked});
	  this.props.selectSource(this, isChecked); 
	}

	renderCheckbox = () => {
	  return (
	  	<input 
	  		className="source-checkbox" 
	  		onChange={(e) => this.toggleCheckboxState()} 
	  		type="checkbox"
	  		checked={this.state.checked}
	  	/>
	  )
	} 

	render() {

		return (
			<div className="large-12 medium-12 columns end">
				<div className="news-source">
					<label>
						{this.props.source.name}
						{this.renderCheckbox()}
			    	</label>
				</div>

			</div>
		)
	}
}

export default NewsSource