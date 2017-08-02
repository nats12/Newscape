import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import Category from './Category';

class Categories extends Component {
  constructor() {
    super()
  }

  render() {

    const { selectCategory, categories } = this.props;

    return(
            <div className="row">
            
              {
                categories.map((category, index) => { 
                  return <Category 
                  key={index} 
                  category={category} 
                  selectCategory={selectCategory}
                  selectedCategories={this.props.selectedCategories}
                  />})
              }
            </div>
      )
  }
}

export default Categories