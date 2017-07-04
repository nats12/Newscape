import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import Category from './Category';

class Categories extends Component {
  constructor() {
    super()
  }

  render() {

    const { getCategories, saveCategories, selectCategory, categories } = this.props;

    return(
        <div>
          <button className="button small" onClick={getCategories}>Get Categories</button>

          {
            categories.map((category, index) => { 
              return <Category 
              key={index} 
              category={category} 
              selectCategory={selectCategory} 
              />})
          }

          <button className="button small" onClick={saveCategories} style={{display:"block"}}>Save</button>
          
        </div>
      )
  }
}

export default Categories