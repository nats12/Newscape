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

  componentDidMount() {
    const height = this.categoriesDiv.clientHeight;
    this.newsSourcesDiv.style.height = `${height}px`;
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
            selectedLanguages,
            toggleMenu
    } = this.props;

    return (
      <div>
        <div className="large-8 medium-6 columns">
          <div className={menuIsOpen ? 'animated fadeIn' : 'animated fadeOut'}>
            <div className="row">
              <div className="large-4 medium-12 columns">
                <div className="categories" ref={(element) => this.categoriesDiv = element }>
                  <Categories 
                    selectedCategories={selectedCategories} 
                    selectCategory={selectCategory}
                    getData={getData}
                    saveData={saveData}
                    categories={categories}
                  />
                </div>
              </div>
              <div className="large-5 medium-12 columns">
                <div className="news-sources" ref={(element) => this.newsSourcesDiv = element}>
                  <NewsSources 
                    selectedCategories={selectedCategories} 
                    selectedLanguages={selectedLanguages}
                    sources={sources} 
                    selectSource={selectSource}
                    selectedSources={selectedSources}
                  />
                </div>
              </div>
              <div className="large-3 medium-12 columns">
                <div className="languages">
                  <Languages 
                    languages={languages}
                    selectLanguage={selectLanguage}
                    selectedLanguages= {selectedLanguages}
                  />
                </div>
              </div>
            </div>
          </div>
        </div>


        <div className="large-4 medium-6 columns">
          <div className={menuIsOpen ? 'options-wrap animated fadeIn' : 'options-wrap animated fadeOut'}>
            {
              this.props.user ?
                <div>
                  <p className="icon-user">Not @{user.handle}? <span><a href={logoutPage}>Log out</a></span></p>
                  <p className="view-feed">View feed &nbsp;
                    <Switch 
                      toggleTwitterFeed={this.props.toggleTwitterFeed}
                      twitterFeedOpen={twitterFeedOpen}
                      toggleMenu={toggleMenu}
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