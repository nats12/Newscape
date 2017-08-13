import React, { Component } from 'react';
import { CSSTransitionGroup } from 'react-transition-group';
import NewsArticle from './NewsArticle';

class NewsFeed extends Component {
    constructor(props) {
        super(props)

        this.state = {
            limitCountEnd: 26,
            intervalId: 0
        }

        this.filtered = [];
    }

    loadMore = () => {
        if (this.state.limitCountEnd < this.props.newsArticles.length) {
            const more = this.state.limitCountEnd += 20;
            this.setState({limitCountEnd: more})
        }
    }

    filterCategory = (articles) => {
        return articles.filter((article) => {
            let ok = false;
            this.props.selectedCategories.map((category) => {
                if (category.name === article.sourceCategory){
                    ok = true;
                }
            })
            return ok;
        })
    }


    filterLanguage = (articles) => {
        return articles.filter((article) => {
            let ok = false;
            this.props.selectedLanguages.map((language) => {
                if (language.iso === article.sourceLanguage){
                    ok = true;
                }
            })
            return ok;
        })
    }

    filterSource = (articles) => {
        return articles.filter((article) => {
            let ok = false;
            this.props.selectedSources.map((source) => {
                if (source.source_id === article.sourceId){
                    ok = true;
                }
            })
            return ok;
        })
    }

    filterLimit = (articles) => {
        return articles.slice(0, this.state.limitCountEnd);
    }

    filterArticles = (articles) => {
        const {selectedCategories, selectedLanguages, selectedSources} = this.props;
        let filtered = articles;
        if (selectedCategories.length > 0) {
            filtered = this.filterCategory(filtered);
        }
        if (selectedLanguages.length > 0) {
            filtered = this.filterLanguage(filtered);
        }
        if (selectedSources.length > 0) {
            filtered = this.filterSource(filtered);
        }
        return filtered;
    }

    sortArticles = (articles) => {
        const currentDate = new Date();

        let ok = false;
        
        return articles.sort((a,b) => new Date(b.publishedAt) - new Date(a.publishedAt) ).filter((article) => {
            const publishedAtDate = new Date(article.publishedAt);
            if(currentDate > publishedAtDate) {
                ok = true;
            }

            return ok;
        })
    }

    renderArticle = (articles) => {
        return(

            <CSSTransitionGroup
              component="div"
              className="row small-collapse large-collapse"
              transitionName={ {
                  enter: 'animated',
                  enterActive: 'zoomInGrow',
                  leave: 'animated',
                  leaveActive: 'zoomOutShrink',
                  appear: 'animated',
                  appearActive: 'zoomInGrow'
                } }
              transitionEnter={true}
              transitionEnterTimeout={800}
              transitionLeave={true}
              transitionLeaveTimeout={800}
              transitionAppear={true}
              transitionAppearTimeout={800}
            >

            {articles.map( (article, index) => {

                return <NewsArticle 
                    key={article.title} 
                    newsArticle={article} 
                    dateFormatter={this.props.dateFormatter} 
                    tweetFormOpen={this.props.tweetFormOpen} 
                    toggleTweetForm={this.props.toggleTweetForm}
                    selectArticle={this.props.selectArticle}
                    user={this.props.user}
                />
            })}

            </CSSTransitionGroup>
        )
    }

    scrollStep = () => {
      if (window.pageYOffset === 0) {
          clearInterval(this.state.intervalId);
      }
      window.scroll(0, window.pageYOffset - 50);
    }
    
    scrollToTop = () => {
      let intervalId = setInterval(this.scrollStep, 10);
      this.setState({ intervalId: intervalId });
    }

    render() {

        const { selectedCategories, categories, savedCategories } = this.props;
        const filtered = this.filterArticles(this.props.newsArticles);
        const sorted = this.sortArticles(filtered);
        const limited = this.filterLimit(sorted);

        return (
            <div>
                <div className="row small-collapse large-collapse"> 

                {
                    this.renderArticle(limited)
                }
                
                </div>
                <div className="row small-collapse large-collapse newsfeed-buttons">
                    <div className="large-6 medium-6-small-12 columns">
                        <button 
                            className="button default load-more" 
                            onClick={() => this.loadMore()} 
                            disabled={this.state.limitCountEnd >= filtered.length ? true : false}
                        >
                            Load More
                        </button>

                        <button 
                            className="button primary scroll-top" 
                            onClick={() => this.scrollToTop()} 
                        >
                            Back to Top
                        </button>
                    </div>
                    <div className="row small-collapse large-collapse">
                        <div className="large-6 medium-6-small-12 columns">
                            <div className="attribution">
                                <p>Powered by <a href="https://newsapi.org" target="_blank">Newsapi.org</a></p>
                            </div>
                        </div>
                    
                    </div>
                    
                </div>
            </div>
        )
    }
}



export default NewsFeed

