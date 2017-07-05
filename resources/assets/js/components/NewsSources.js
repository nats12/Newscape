import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import NewsSource from './NewsSource';

import axios from 'axios';

class NewsSources extends Component {
	constructor() {
		super()

		this.state = {
	      sources: [],
	      selectedSources: [],
	    }
	}


	selectSource = (e) => {
    const sourceCheckboxes = document.querySelectorAll('.source-checkbox');
    const sourceCheckboxArray = [].slice.call(sourceCheckboxes);
    let selectedSourcesArray = [];
    sourceCheckboxArray.map(checkbox => {
      if(checkbox.checked && (selectedSourcesArray.indexOf(checkbox.getAttribute('data-id')) === -1)) {
        selectedSourcesArray.push(checkbox.getAttribute('data-id'));
      }
      else  {
        selectedSourcesArray.splice(checkbox.getAttribute('data-id'),1);
      }
    });
    console.log(selectedSourcesArray);

    this.setState({
    	selectedSources: selectedSourcesArray
    });
  }

  getSources = () => {
    axios.get('/api/sources')
      .then(response => {
        console.log(this.state);

        this.setState({sources: response.data.sources});
      })
      .catch( error => {
        console.log(error);
      });
  }

  saveSources = () => {
    axios.post('/api/source', {
        sources: this.state.selectedSources
      })
      .then(response => {
        console.log(response);
      })
      .catch(error => {
        console.log(error);
      });
  }

	render() {

	
		return (
			<div>
        <button className="button small" onClick={this.getSources}>Get Sources</button>

				{
		      this.state.sources.map((source, index) => <NewsSource 
            key={index}
            dataID={source.id}
            source={source} 
            selectSource={this.selectSource}
            />)
		    } 

				<button className="button small" onClick={this.saveSources} style={{display:"block"}}>Save</button>
      </div>
		)

	}
}



export default NewsSources