import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import CSSTransitionGroup from 'react-addons-css-transition-group';

import Categories from './Categories';
import NewsSources from './NewsSources';


class Filter extends Component {
  constructor() {
    super()

  }

  render() {

    const {
            selectedCategories, 
            selectCategory, 
            selectSource, 
            sources, 
            getData, 
            saveData, 
            categories, 
            user, 
            menuIsOpen,
            logoutPage
    } = this.props;

    return (
      <div>
        <div className="large-8 medium-7 columns">
          {
            menuIsOpen ?

              <CSSTransitionGroup
                transitionName="filter_menu"
                className="filter_menu"
                component="div"
                transitionAppear={true}
                transitionAppearTimeout={500}
                transitionEnterTimeout={500}
                transitionLeaveTimeout={300}>
                <div>
                  <div className="row">
                    <div className="large-6 medium-12 columns">
                      <Categories 
                        selectedCategories={selectedCategories} 
                        selectCategory={selectCategory}
                        getData={getData}
                        saveData={saveData}
                        categories={categories}
                      />
                    </div>
                    <div className="large-6 medium-12 columns">
                      <NewsSources selectedCategories={selectedCategories} sources={sources} selectSource={selectSource}/>
                    </div>
                  </div>
                </div>
              </CSSTransitionGroup>
              :
                ''
          }
        </div>

        <div className="large-4 medium-5 columns">
          <div className={`options-wrap ${menuIsOpen ? 'pad-10' : ''}`}>
            {
              this.props.user && menuIsOpen ?
                <div>
                  <p className="icon-user">Not @{user.handle}? <span><a href={logoutPage}>Log out</a></span></p>
                  <p>View feed</p>
                  <p>Search hashtag</p>
                </div>
              :
                ''
            }
          </div>
        </div>
      </div>
    )

  }
}

export default Filter