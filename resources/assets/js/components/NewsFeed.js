import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { CSSTransitionGroup } from 'react-transition-group';
import NewsArticle from './NewsArticle';


class NewsFeed extends Component {
    constructor(props) {
        super(props)

        this.state = {
            limitCountEnd: 26,
        }

        this.filtered = [];
    }

    loadMore = () => {
        if (this.state.limitCountEnd < this.props.newsArticles.length) {
            const more = this.state.limitCountEnd += 20;
            this.setState({limitCountEnd: more})
        }

        //set twitterfeed height equal to newsfeed height when more articles loaded
        console.log('BLAH')
        console.log(this.props.newsfeedDiv, this.props.twitterfeedDiv);
        this.props.setTwitterFeedHeight(this.props.newsfeedDiv, this.props.twitterfeedDiv);

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
              className="row small-collapse large-collapse newsfeed"
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
                <div className="row">
                    <button 
                        className="button success load-more" 
                        onClick={() => this.loadMore()} 
                        disabled={this.state.limitCountEnd >= filtered.length ? true : false}
                    >
                        Load More
                    </button>
                </div>
            </div>
            )
    }
}



export default NewsFeed

// {
//     this.props.newsArticles.sort((a,b) => new Date(b.publishedAt) - new Date(a.publishedAt) )
//     .map(

//         (item, index) => {
//             const publishedAtDate = new Date(item.publishedAt);

//             if(selectedCategories.length === 0 && currentDate > publishedAtDate && limitCounter <= this.state.limitCountEnd) {
//                 limitCounter +=1;
//                 return this.renderArticle(item, index);
//             }
//             else if (selectedCategories.length > 0 && currentDate > publishedAtDate && limitCounter <= this.state.limitCountEnd) {
//                 return selectedCategories.map((category) => {
//                     if (category.name === item.sourceCategory) {
//                         limitCounter +=1;
//                         return this.renderArticle(item, index);
//                     }
//                 });

//             }
//         })
// } 




