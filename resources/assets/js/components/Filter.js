import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import Categories from './Categories';
import NewsSources from './NewsSources';


class Filter extends Component {
  constructor() {
    super()

  }

  render() {

    const {selectedCategories, selectCategory, getCategories, saveCategories, categories} = this.props;

    return (
      <div>
        <div className="large-2 columns">
          <br/>
          <Categories 
            selectedCategories={selectedCategories} 
            selectCategory={selectCategory}
            getCategories={getCategories}
            saveCategories={saveCategories}
            categories={categories}
          />
        </div>

        <div className="large-10 columns">
          <br/>
          <NewsSources selectedCategories={selectedCategories} />
        </div>
      </div>
    )

  }
}

export default Filter