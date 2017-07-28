import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { CSSTransitionGroup } from 'react-transition-group';

import Categories from './Categories';
import NewsSources from './NewsSources';
import Languages from './Languages';


class Filter extends Component {
  constructor() {
    super()

  }

  render() {

    const {
            selectedCategories, 
            selectCategory, 
            selectSource,
            selectedSources, 
            sources, 
            getData, 
            saveData, 
            categories, 
            user, 
            menuIsOpen,
            logoutPage,
            languages,
            selectLanguage,
            selectedLanguages
    } = this.props;

    return (
      <div>
        <CSSTransitionGroup
          component="div"
          className="large-8 medium-7 columns slide"
          transitionName={ {
              enter: 'animated',
              enterActive: 'slideInDown',
              leave: 'leave',
              leaveActive: 'leaveActive',
              appear: 'appear',
              appearActive: 'appearActive'
            } }
          transitionEnter={true}
          transitionEnterTimeout={5000}
          transitionLeave={true}
          transitionLeaveTimeout={5000}
        >
          {
            menuIsOpen ?
                <div>
                  <div className="row">
                    <div className="large-4 medium-12 columns">
                      <Categories 
                        selectedCategories={selectedCategories} 
                        selectCategory={selectCategory}
                        getData={getData}
                        saveData={saveData}
                        categories={categories}
                      />
                    </div>
                    <div className="large-5 medium-12 columns">
                      <NewsSources 
                        selectedCategories={selectedCategories} 
                        selectedLanguages={selectedLanguages}
                        sources={sources} 
                        selectSource={selectSource}
                        selectedSources={selectedSources}
                      />
                    </div>
                    <div className="large-3 medium-12 columns">
                      <Languages 
                        languages={languages}
                        selectLanguage={selectLanguage}
                        selectedLanguages= {selectedLanguages}
                      />
                    </div>
                  </div>
                </div>
              :
                ''
          }
        </CSSTransitionGroup>

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