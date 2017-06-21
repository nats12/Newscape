import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import NewsSource from './NewsSource';

class NewsSources extends Component {
	constructor() {
		super()
	}

	render() {

	
		return (
			<div> 
				{
					Object.keys(this.props.newsSources).map(key => <NewsSource key={key} newsSource={this.props.newsSources[key]} />)
				} 
			</div>
		)

	}
}



export default NewsSources