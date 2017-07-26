import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import NewsSource from './NewsSource';

import axios from 'axios';

class NewsSources extends Component {
	constructor() {
		super()
	}

	render() {

    const { selectedCategories } = this.props;
	
		return (
			<div>
          {
            this.props.sources.length !==0 ?
              <div className="news-sources">
                <div className="row">
                  {
                    this.props.sources.map((source, index) => {

                      if (selectedCategories.length === 0) {
                        return <NewsSource 
                                  key={index}
                                  source={source} 
                                  selectSource={this.props.selectSource}
                                />
                      }

                      else {
                        return selectedCategories.map((category) => {
                            if (category.name == source.category) {
                                return <NewsSource 
                                  key={index}
                                  source={source} 
                                  selectSource={this.props.selectSource}
                                />
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