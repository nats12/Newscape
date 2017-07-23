import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import Categories from './Categories';
import NewsSources from './NewsSources';


class Filter extends Component {
  constructor() {
    super()

  }

  render() {

    const {selectedCategories, selectCategory, getCategories, saveCategories, categories, user, menuIsOpen} = this.props;

    return (
      <div>
        <div className="large-8 medium-7 columns">
          {
            menuIsOpen ?
              <div>
                <div className="row">
                  <div className="large-6 medium-12 columns">
                    <Categories 
                      selectedCategories={selectedCategories} 
                      selectCategory={selectCategory}
                      getCategories={getCategories}
                      saveCategories={saveCategories}
                      categories={categories}
                    />
                  </div>
                  <div className="large-6 medium-12 columns">
                    <NewsSources selectedCategories={selectedCategories} />
                  </div>
                </div>
              </div>
              :
                ''
          }
        </div>

        <div className="large-4 medium-5 columns">
          {
            this.props.user && menuIsOpen ?
              <div>
                <p className="icon-user">Not {user.name}? Log out</p>
                <p>View feed</p>
                <p>Search hashtag</p>
              </div>
            :
              ''
          }
        </div>
      </div>
    )

  }
}

export default Filter