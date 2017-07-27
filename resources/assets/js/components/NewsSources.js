import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import NewsSource from './NewsSource';

import axios from 'axios';

class NewsSources extends Component {
	constructor(props) {
		super(props)

    this.state = {
      filtered: []
    }
	}

  renderSource = (source, index) => {
    return (
      <NewsSource 
        key={index}
        source={source} 
        selectSource={this.props.selectSource}
      />
    )
  }

  updateState = (filtered) => {
    this.setState({filtered: filtered});
  }

	render() {

    const { selectedCategories, selectedLanguages } = this.props;
	
		return (
			<div>
          {
            this.props.sources.length !==0 ?
              <div className="news-sources">
                <div className="row">
                  {
                    
                    this.props.sources.map((source, index) => {

                      if (selectedCategories.length === 0 && selectedLanguages.length === 0) {
                        return this.renderSource(source, index);
                      }

                      else if (selectedCategories.length > 0 && selectedLanguages.length === 0) {
                        return selectedCategories.map((category) => {
                            if (category.name == source.category) {
                                return this.renderSource(source, index);
                            }
                        })
                      }

                      else {
                        return selectedCategories.map((category) => {
                            if (category.name == source.category) {
                              return (
                                selectedLanguages.map((language) => {
                                  if (language.iso == source.language) {
                                      return this.renderSource(source, index);
                                  }
                                })
                              )
                            }

                        })
                      }
                    })
                  } 
                </div>
              </div>
            : ''
          }
          
          
      </div>
		)

	}
}



export default NewsSources