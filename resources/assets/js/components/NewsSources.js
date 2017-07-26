import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import NewsSource from './NewsSource';

import axios from 'axios';

class NewsSources extends Component {
	constructor() {
		super()
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
                        return this.renderSource(source, index);
                      }

                      else {
                        return selectedCategories.map((category) => {
                            if (category.name == source.category) {
                                return this.renderSource(source, index);
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