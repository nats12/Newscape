import React, { Component } from 'react';
import ReactDOM from 'react-dom';


class NewsSource extends Component {
	constructor() {
		super()
		this.state = {
		}
	}

	toggleCheckboxState = (e) => {
	  this.setState({checked: e.target.checked});
	  this.props.selectSource(this, e.target.checked); 
	}

	render() {

		return (
			<div className="large-12 medium-12 columns end">
				<div className="news-source">
					<label>
						{this.props.source.name}
			        	<input 
			        		className="source-checkbox" 
			        		onChange={(e) => this.toggleCheckboxState(e)} 
			        		type="checkbox"
			        	/>
			    	</label>
				</div>

			</div>
		)

	}
}

export default NewsSource