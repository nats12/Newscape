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

    const { selectedCategories } = this.props;
	
		return (
			<div>
          <button className="button small" onClick={this.getSources}>Get Sources</button>
          <button className="button small" onClick={this.saveSources} style={{display:"block"}}>Save Sources</button>

          {
            this.state.sources.map((source, index) => {

              if (selectedCategories.length === 0) {
                return <NewsSource 
                          key={index}
                          source={source} 
                          selectSource={this.selectSource}
                        />
              }

              else {
                return selectedCategories.map((category) => {
                    if (category.name == source.category) {
                        return <NewsSource 
                          key={index}
                          source={source} 
                          selectSource={this.selectSource}
                        />
                    }
                })
              }
            })
          } 
      </div>
		)

	}
}



export default NewsSources