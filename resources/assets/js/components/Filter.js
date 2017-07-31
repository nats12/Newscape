import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { CSSTransitionGroup } from 'react-transition-group';

import Categories from './Categories';
import NewsSources from './NewsSources';
import Languages from './Languages';
import Switch from './Switch';


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
            twitterFeedOpen,
            logoutPage,
            languages,
            selectLanguage,
            selectedLanguages
    } = this.props;

    return (
      <div>
        <div className="large-8 medium-7 columns">
          <div className={menuIsOpen ? 'animated fadeIn' : 'animated fadeOut'}>
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
        </div>


        <div className="large-4 medium-5 columns">
          <div className={menuIsOpen ? 'options-wrap animated fadeIn' : 'options-wrap animated fadeOut'}>
            {
              this.props.user ?
                <div>
                  <p className="icon-user">Not @{user.handle}? <span><a href={logoutPage}>Log out</a></span></p>
                  <p className="view-feed">View feed &nbsp;
                    <Switch 
                      toggleTwitterFeed={this.props.toggleTwitterFeed}
                      twitterFeedOpen={twitterFeedOpen}
                    />
                  </p>
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